<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubcategoryApiTest extends TestCase
{
    use MakeSubcategoryTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateSubcategory()
    {
        $subcategory = $this->fakeSubcategoryData();
        $this->json('POST', '/api/v1/subcategories', $subcategory);

        $this->assertApiResponse($subcategory);
    }

    /**
     * @test
     */
    public function testReadSubcategory()
    {
        $subcategory = $this->makeSubcategory();
        $this->json('GET', '/api/v1/subcategories/'.$subcategory->id);

        $this->assertApiResponse($subcategory->toArray());
    }

    /**
     * @test
     */
    public function testUpdateSubcategory()
    {
        $subcategory = $this->makeSubcategory();
        $editedSubcategory = $this->fakeSubcategoryData();

        $this->json('PUT', '/api/v1/subcategories/'.$subcategory->id, $editedSubcategory);

        $this->assertApiResponse($editedSubcategory);
    }

    /**
     * @test
     */
    public function testDeleteSubcategory()
    {
        $subcategory = $this->makeSubcategory();
        $this->json('DELETE', '/api/v1/subcategories/'.$subcategory->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/subcategories/'.$subcategory->id);

        $this->assertResponseStatus(404);
    }
}
