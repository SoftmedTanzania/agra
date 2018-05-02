<?php

use App\Models\Subcategory;
use App\Repositories\SubcategoryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubcategoryRepositoryTest extends TestCase
{
    use MakeSubcategoryTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SubcategoryRepository
     */
    protected $subcategoryRepo;

    public function setUp()
    {
        parent::setUp();
        $this->subcategoryRepo = App::make(SubcategoryRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSubcategory()
    {
        $subcategory = $this->fakeSubcategoryData();
        $createdSubcategory = $this->subcategoryRepo->create($subcategory);
        $createdSubcategory = $createdSubcategory->toArray();
        $this->assertArrayHasKey('id', $createdSubcategory);
        $this->assertNotNull($createdSubcategory['id'], 'Created Subcategory must have id specified');
        $this->assertNotNull(Subcategory::find($createdSubcategory['id']), 'Subcategory with given id must be in DB');
        $this->assertModelData($subcategory, $createdSubcategory);
    }

    /**
     * @test read
     */
    public function testReadSubcategory()
    {
        $subcategory = $this->makeSubcategory();
        $dbSubcategory = $this->subcategoryRepo->find($subcategory->id);
        $dbSubcategory = $dbSubcategory->toArray();
        $this->assertModelData($subcategory->toArray(), $dbSubcategory);
    }

    /**
     * @test update
     */
    public function testUpdateSubcategory()
    {
        $subcategory = $this->makeSubcategory();
        $fakeSubcategory = $this->fakeSubcategoryData();
        $updatedSubcategory = $this->subcategoryRepo->update($fakeSubcategory, $subcategory->id);
        $this->assertModelData($fakeSubcategory, $updatedSubcategory->toArray());
        $dbSubcategory = $this->subcategoryRepo->find($subcategory->id);
        $this->assertModelData($fakeSubcategory, $dbSubcategory->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSubcategory()
    {
        $subcategory = $this->makeSubcategory();
        $resp = $this->subcategoryRepo->delete($subcategory->id);
        $this->assertTrue($resp);
        $this->assertNull(Subcategory::find($subcategory->id), 'Subcategory should not exist in DB');
    }
}
