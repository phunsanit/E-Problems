<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetCacheController extends Controller
{
    /**
     * SelectOption
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     *
     * create a json file with the data from the model for the select option
     */
    public function SelectOptions(request $request)
    {
        // Validate the request
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Get configuration
        $name = $request->input('name');

        switch ($name) {
            case 'category_id':
                $model = 'Category';
                break;

            case 'organization_id':
                $model = 'Organization';
                break;

            case 'service_line_id':
                $model = 'ServiceLine';
                break;

            case 'status_id':
                $model = 'Status';
                break;

            case 'team_id':
                $model = 'Team';
                break;

            case 'team_support_id':
                $model = 'TeamUser';
                break;

            case 'vessel_id':
                $model = 'Vessel';
                break;

            default:
                \Log::error('AssetCacheController: no assets configuration for ' . $name);
                return response()->json(['error' => 'Internal server error'], 500);
                break;
        }

        // Perform operations with the model
        $modelClass = "App\\Models\\{$model}";
        if (class_exists($modelClass)) {
            if (method_exists($modelClass, 'getOptions')) {
                $options = (new $modelClass)->getOptions();

                $filePath = public_path('assets/options/' . $name . '.json');

                file_put_contents($filePath, json_encode($options));

                return response()->json($options);
            } else {
                \Log::error('AssetCacheController: Method getOptions() not found in model: ' . $model);
                return response()->json(['error' => 'Internal server error'], 500);
            }
        } else {
            \Log::error('AssetCacheController: Model ' . $model . ' not found');
            return response()->json(['error' => 'Internal server error'], 500);
        }
    }
}
