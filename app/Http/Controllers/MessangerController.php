<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MessangerInterface;

class MessangerController extends Controller
{
    protected $messengerRepository;
    public function __construct(MessangerInterface $messengerRepository)
    {
        $this->messengerRepository = $messengerRepository;
    }

    public function index(){
        return $this->messengerRepository->index();
    }
}
