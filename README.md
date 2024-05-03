# Code for Livewire bug


1. Create a basic form in Laravel with validation, and use the `@error()` function to display the error message when failing the validation:
```
<input type="text" name="title" />
@error('title')
  {{ $message }}
@enderror
```
2. Create a Livewire Component that includes an additional blank function
```
<?php

namespace App\Livewire;

use Livewire\Component;

class BadComponent extends Component
{
    public function testAction()
    {

    }
    public function render()
    {
        return view('livewire.bad-component');
    }
}
```
3. In the Livewire component, use alpine's `@click.outside` function to call the Livewire function
```
<div @click.outside="$wire.testAction()">
</div>
```
4. Test submitting the form. The form will fail validation but errors will not be displayed. If however the Livewire component is large, the errors may display sometimes, but not all the time.
