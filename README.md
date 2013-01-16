Wiakowe Form Bundle
===================

Set of form types which we have ended up needing.

Travis status: [![Build Status](https://secure.travis-ci.org/Wiakowe/WiakoweFormBundle.png?branch=master)](http://travis-ci.org/Wiakowe/WiakoweFormBundle)

Choice with disabled options
----------------------------

The type `choice_with_disabled_options` works exactly like the `choice` type, except that it adds an additional option,
`disabled_choices`, which allows you to show some options greyed out.

Example usage:

    $formBuilder->add(
        'field',
        'choice_with_disabled_options',
        array(1 => 'First', 2 => 'Second'),
        array(
            'disabled_choices' => array(2)
        )
    );

This code will lead, aproximately, to the following HTML:

    <select>
        <option value="1">First</option>
        <option value="2" disabled="disabled">Second</option>
    </select>

JQuery MiniColors
-----------------

The JQuery Minicolors type allows adding a color picker to a form. The selected color will be stored as a 6 characters hex
with a prepended #. For instance: `#ff00ff`.

Example usage:

    $formBuilder->add('field', 'jquery_minicolors');

For this plugin to work properly, it requires that the user has loaded the [JQuery Minicolors](https://github.com/claviska/jquery-miniColors)
library.

Next steps
----------

 * Validate that `choice_with_disabled_options` doesn't receive a disabled choice.
 * Make `choice_with_disabled_options` work with the `expanded` template.
