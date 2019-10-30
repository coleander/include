<?php

namespace coleander;

trait HandleIncludes
{
    /**
     * Returns a bool wether a specific key has been provided as a query param in the include param
     *
     * @param [type] $key
     * @param \Illuminate\Http\Request $request
     * @return boolean
     */
    public function isIncluded($key, \Illuminate\Http\Request $request)
    {
        $includes = explode(',', $request->get('include'));

        return (boolean) in_array($key, $includes);
    }
}
