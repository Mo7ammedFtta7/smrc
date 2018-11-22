<?php

use Illuminate\Support\Facades\Request;
use Litepie\Support\Facades\Hashids;
use Litepie\Support\Facades\Trans;

if (!function_exists('hashids_encode')) {
    /**
     * Encode the given id.
     *
     * @param int/array $id
     *
     * @return string
     */
    function hashids_encode($idorarray)
    {
        return Hashids::encode($idorarray);
    }
}

if (!function_exists('hashids_decode')) {
    /**
     * Decode the given value.
     *
     * @param string $value
     *
     * @return array / int
     */
    function hashids_decode($value)
    {
        $return = Hashids::decode($value);

        if (empty($return)) {
            return;
        }

        if (count($return) == 1) {
            return $return[0];
        }

        return $return;
    }
}

if (!function_exists('folder_new')) {
    /**
     * Get new upload folder pathes.
     *
     * @param string $prefix
     * @param string $sufix
     *
     * @return array
     */
    function folder_new($prefix = null, $sufix = null)
    {
        $folder = date('Y/m/d/His').rand(100, 999);

        return $folder;
    }
}

if (!function_exists('blade_compile')) {
    /**
     * Get new upload folder pathes.
     *
     * @param string $prefix
     * @param string $sufix
     *
     * @return array
     */
    function blade_compile($string, array $args = [])
    {
        $compiled = \Blade::compileString($string);
        ob_start() and extract($args, EXTR_SKIP);

        // We'll include the view contents for parsing within a catcher

        // so we can avoid any WSOD errors. If an exception occurs we
        // will throw it out to the exception handler.
        try {
            eval('?>'.$compiled);
        }

        // If we caught an exception, we'll silently flush the output

        // buffer so that no partially rendered views get thrown out
        // to the client and confuse the user with junk.
        catch (\Exception $e) {
            ob_get_clean();

            throw $e;
        }

        $content = ob_get_clean();
        $content = str_replace(['@param  ', '@return  ', '@var  ', '@throws  '], ['@param ', '@return ', '@var ', '@throws '], $content);

        return $content;
    }
}

if (!function_exists('trans_url')) {
    /**
     * Get translated url.
     *
     * @param string $url
     *
     * @return string
     */
    function trans_url($url = null, $lng = null)
    {
        return Trans::to($url, $lng);
    }
}

if (!function_exists('trans_dir')) {
    /**
     * Return the direction of current language.
     *
     * @return string (ltr|rtl)
     */
    function trans_dir()
    {
        return Trans::getCurrentTransDirection();
    }
}

if (!function_exists('trans_setlocale')) {
    /**
     * Set local for the translation.
     *
     * @param string $locale
     *
     * @return string
     */
    function trans_setlocale($locale = null)
    {
        return Trans::setLocale($locale);
    }
}

if (!function_exists('checkbox_array')) {
    /**
     * Convert array to use in form check box.
     *
     * @param array  $array
     * @param string $name
     * @param array  $options
     *
     * @return array
     */
    function checkbox_array(array $array, $name, $options = [])
    {
        $return = [];

        foreach ($array as $key => $val) {
            $return[$val] = array_merge(['name' => "{$name}[{$key}]"], $options);
        }

        return $return;
    }
}

if (!function_exists('pager_array')) {
    /**
     * Return request values to be used in paginator.
     *
     * @return array
     */
    function pager_array()
    {
        return Request::only(
            config('database.criteria.params.search', 'search'),
            config('database.criteria.params.searchFields', 'searchFields'),
            config('database.criteria.params.columns', 'columns'),
            config('database.criteria.params.sortBy', 'sortBy'),
            config('database.criteria.params.orderBy', 'orderBy'),
            config('database.criteria.params.with', 'with')
        );
    }
}

if (!function_exists('user_type')) {
    /**
     * Get user id.
     *
     * @param string $guard
     *
     * @return int
     */
    function user_type($guard = null)
    {
        $guard = is_null($guard) ? getenv('guard') : $guard;
        $provider = config('auth.guards.'.$guard.'.provider', 'users');

        return config("auth.providers.$provider.model", App\User::class);
    }
}

if (!function_exists('user_id')) {
    /**
     * Get user id.
     *
     * @param string $guard
     *
     * @return int
     */
    function user_id($guard = null)
    {
        $guard = is_null($guard) ? getenv('guard') : $guard;

        if (Auth::guard($guard)->check()) {
            return Auth::guard($guard)->user()->id;
        }
    }
}

if (!function_exists('get_guard')) {
    /**
     * Return thr property of the guard for current request.
     *
     * @param string $property
     *
     * @return mixed
     */
    function get_guard($property = 'guard')
    {
        switch ($property) {
            case 'url':
                return empty(getenv('guard')) ? 'user' : current(explode('.', getenv('guard')));
                break;
            case 'route':
                return empty(getenv('guard')) ? 'user' : current(explode('.', getenv('guard')));
                break;
            case 'model':
                $provider = config('auth.guards.'.getenv('guard').'.provider', 'users');

                return config("auth.providers.$provider.model", App\User::class);
                break;
            default:
                return getenv('guard');
        }
    }
}

if (!function_exists('guard_url')) {
    /**
     * Return thr property of the guard for current request.
     *
     * @param string $property
     *
     * @return mixed
     */
    function guard_url($url, $translate = true)
    {
        $prefix = empty(getenv('guard')) ? config('auth.defaults.url', 'user') : current(explode('.', getenv('guard')));
        if ($translate) {
            return trans_url($prefix.'/'.$url);
        }

        return $prefix.'/'.$url;
    }
}

if (!function_exists('set_route_guard')) {
    /**
     * Set local for the translation.
     *
     * @param string $locale
     *
     * @return string
     */
    function set_route_guard($sub = 'web')
    {
        $i = ($sub == 'web') ? 1 : 2;

        //check whether guard is the first parameter of the route
        $guard = request()->segment($i);

        if (!empty(config("auth.guards.$guard"))) {
            putenv("guard={$guard}.{$sub}");
            app('auth')->shouldUse("{$guard}.{$sub}");

            return $guard;
        }

        //check whether guard is the second parameter of the route
        $guard = request()->segment(++$i);
        if (!empty(config("auth.guards.$guard"))) {
            putenv("guard={$guard}.{$sub}");
            app('auth')->shouldUse("{$guard}.{$sub}");

            return $guard;
        }

        $guard = request()->segment(++$i);
        if (!empty(config("auth.guards.$guard"))) {
            putenv("guard={$guard}.{$sub}");
            app('auth')->shouldUse("{$guard}.{$sub}");

            return $guard;
        }

        return 'client';
    }
}

if (!function_exists('users')) {
    /**
     * Get upload folder.
     *
     * @param string $folder
     *
     * @return string
     */
    function users($property, $guard = null)
    {
        $guard = is_null($guard) ? getenv('guard') : $guard;

        if (Auth::guard($guard)->check()) {
            return Auth::guard($guard)->user()->$property;
        }
    }
}

if (!function_exists('user')) {
    /**
     * Return the user model.
     *
     * @param type|null $guard
     *
     * @return type
     */
    function user($guard = null)
    {
        $guard = is_null($guard) ? getenv('guard') : $guard;
        if (Auth::guard($guard)->check()) {
            return Auth::guard($guard)->user();
        }
    }
}

if (!function_exists('user_check')) {
    /**
     * Check whether user is logged in.
     *
     * @param type|null $guard
     *
     * @return type
     */
    function user_check($guard = null)
    {
        $guard = is_null($guard) ? getenv('guard') : $guard;

        return Auth::guard($guard)->check();
    }
}

if (!function_exists('format_date')) {
    /**
     * Format date.
     *
     * @param string $date
     * @param string $format
     *
     * @return date
     */
    function format_date($date, $format = 'd M Y')
    {
        if (empty($date)) {
            return;
        }

        return date($format, strtotime($date));
    }
}

if (!function_exists('format_date_time')) {
    /**
     * Format datetime.
     *
     * @param date   $datetime
     * @param string $format
     *
     * @return datetime
     */
    function format_date_time($datetime, $format = 'd M Y h:i A')
    {
        return date($format, strtotime($datetime));
    }
}

if (!function_exists('format_time')) {
    /**
     * Format time.
     *
     * @param string $time
     * @param string $format
     *
     * @return time
     */
    function format_time($time, $format = 'h:i A')
    {
        return date($format, strtotime($time));
    }
}
