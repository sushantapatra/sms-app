# Socaity Management System

## Requirements

## Technology

## Lets Start

### Building Layouts Using Components

-   Defining The Layout Component

```
php artisan make:component Layout
```

For example, imagine we are building a "todo" list application. We might define a layout component that looks like the following:

```
<!-- resources/views/components/layout.blade.php -->

<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
    </head>
    <body>
        <h1>Todos</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>
```

-   Applying The Layout Component

Once the layout component has been defined, we may create a Blade view that utilizes the component. In this example, we will define a simple view that displays our task list:

```
<!-- resources/views/tasks.blade.php -->

<x-layout>
    @foreach ($tasks as $task)
        {{ $task }}
    @endforeach
</x-layout>
```

Remember, content that is injected into a component will be supplied to the default $slot variable within our layout component. As you may have noticed, our layout also respects a $title slot if one is provided; otherwise, a default title is shown. We may inject a custom title from our task list view using the standard slot syntax discussed in the component documentation:
`https://laravel.com/docs/10.x/blade#components`

-   Create a Component without a class file only view file

```
php artisan make:component forms.input --view

<x-forms.input />
```

The command above will create a Blade file at resources/views/components/forms/input.blade.php which can be rendered as a component via <x-forms.input />.

-   Passing Data To Components

: => use for php variable

```
<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Alert extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $type,
        public string $message,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.alert');
    }
}
<x-alert type="error" :message="$message"/>

//Short Attribute Syntax
{{-- Short attribute syntax... --}}
<x-profile :$userId :$name />

{{-- Is equivalent to... --}}
<x-profile :user-id="$userId" :name="$name" />
```

### Slots

```
<!-- /resources/views/components/alert.blade.php -->

<div class="alert alert-danger">
    {{ $slot }}
</div>
```

```
<x-alert>
    <strong>Whoops!</strong> Something went wrong!
</x-alert>
```

```
<!-- /resources/views/components/alert.blade.php -->

<span class="alert-title">{{ $title }}</span>

<div class="alert alert-danger">
    {{ $slot }}
</div>
```
