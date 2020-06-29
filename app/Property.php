<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $table = 'properties';

    protected $dates = ['deleted_at'];

    public function getProperties($filterBy = NULL, $filter = NULL, $sortBy = NULL, $direction = NULL){
        try{
            return Property::select('*')
                ->when($filterBy == 'city', function ($query, $filterBy) use ($filter) {
                    return $query->where('location', 'LIKE', "%$filter%");
                })
                ->when($sortBy, function ($query, $sortBy) use ($direction) {
                    return $query->orderBy($sortBy, $direction);
                })
                ->get()
                ->toArray();

        }catch (\Exception $e){
            $this->logError($e);
            return [];
        }
    }

    private function logError(\Exception $e){
        $err = [
            'message' => $e->getMessage(),
            'line' => $e->getLine(),
            'file' => $e->getFile(),
            'trace' => $e->getTrace()
        ];
        \Log::error($err);
    }


}
