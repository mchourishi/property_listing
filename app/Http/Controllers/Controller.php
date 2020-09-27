<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // validations
    protected const VAL_REQ = 'required';
    protected const VAL_REQ_NUMERIC = 'required|numeric';
    protected const VAL_REQ_INTEGER = 'required|integer';
    protected const VAL_IMG = 'image|nullable|mimes:jpeg,png,jpg,gif|max:2048';

    // messages
    protected const SESSION_MESSAGE = 'message';
    protected const SESSION_WARNING = 'warning';
    protected const SESSION_ERROR = 'error';
}
