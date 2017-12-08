<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Base\Controllers\AdminController;
use App\Http\Controllers\Api\DataTables\QuestionerDataTable;
use App\Http\Requests\Admin\QuestionerRequest;
use App\Questioner;

class QuestionerController extends AdminController
{

    /**
     * Image column of the model
     *
     * @var string
     */
    private $imageColumn = "picture";

    /**
     * Display a listing of the users.
     *
     * @param UserDataTable $dataTable
     * @return Response
     */
    public function index(QuestionerDataTable $dataTable)
    {
        return $dataTable->render($this->viewPath());
    }

    /**
     * Store a newly created user in storage
     *
     * @param UserRequest $request
     * @return Response
     */
    public function store(QuestionerRequest $request)
    {
        return $this->createFlashRedirect(Questioner::class, $request);
    }

    /**
     * Display the specified user.
     *
     * @param User $user
     * @return Response
     */
    public function show(Questioner $user)
    {
        return $this->viewPath("show", $user);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param User $user
     * @return Response
     */
    public function edit(Questioner $user)
    {
        return $this->getForm($user);
    }

    /**
     * Update the specified user in storage.
     *
     * @param User $user
     * @param UserRequest $request
     * @return Response
     */
    public function update(Questioner $user, QuestionerRequest $request)
    {
        return $this->saveFlashRedirect($user, $request, $this->imageColumn);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param User $user
     * @return Response
     */
    public function destroy(Questioner $user)
    {
        if ($user->id != Auth::user()->id) {
            return $this->destroyFlashRedirect($user);
        } else {
            return $this->redirectRoutePath("index", "admin.delete.self");
        }
    }
}
