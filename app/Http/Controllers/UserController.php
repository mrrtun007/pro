<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
use App\Models\Product;
use App\DataTables\CustomerdataDataTable;
use resources\views\products\users;

class UserController extends Controller
{
  public function index(CustomerdataDataTable $dataTable)
  {
      return $dataTable->render('users');
  }
}