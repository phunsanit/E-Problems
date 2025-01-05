<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetCacheController extends Controller
{
    /**
     * cacheSelectOptions
     *
     * @param string $model The model to get the options from
     * @param string $key The key to use for the cache file
     * @return write the options to a json file
     *
     * create a json file with the data from the model for the select option
     */
    public function cacheSelectOptions($model, $key)
    {
        // Perform operations with the model
        $modelClass = "App\\Models\\{$model}";
        if (class_exists($modelClass)) {
            if (method_exists($modelClass, 'getOptions')) {
                $options = (new $modelClass)->getOptions();

                $filePath = public_path('assets/options/' . $key . '.json');

                file_put_contents($filePath, json_encode($options));

                return response()->json($options);
            } else {
                \Log::error('AssetCacheController: Method getOptions() not found in model: ' . $model);
            }
        } else {
            \Log::error('AssetCacheController: Model ' . $model . ' not found');
        }
    }

    /**
     * getSelectOptions
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * create a json file with the data from the model for the select option and return the data
     */
    public function getSelectOptions(Request $request)
    {
        // Validate the request
        $validator = \Validator::make($request->all(), [
            'key' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Get configuration
        $key = $request->input('key');

        switch ($key) {

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
                \Log::error('AssetCacheController: no assets configuration for ' . $key);
                return response()->json(['error' => 'Internal server error'], 500);
                break;

        }

        $this->CacheSelectOptions($key, $model);

        $filePath = public_path('assets/options/' . $key . '.json');

        if (file_exists($filePath)) {
            $options = json_decode(file_get_contents($filePath), true);
            return response()->json($options);
        } else {
            return response()->json(['error' => 'Cache file not found'], 404);
        }
    }
}
