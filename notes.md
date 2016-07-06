# Points à mentionner

Un peu en vrac, une liste des RFCs correspondant aux points qu'il peut être intéressant de mentionner,
à mon avis.

## PHP 7.0

 * Null Coalesce Operator - https://wiki.php.net/rfc/isset_ternary
 * Remove alternative PHP tags - https://wiki.php.net/rfc/remove_alternative_php_tags
 * Unicode Codepoint Escape Syntax - https://wiki.php.net/rfc/unicode_escape
 * Remove deprecated functionality in PHP 7 - https://wiki.php.net/rfc/remove_deprecated_functionality_in_php7
 * Return Types - https://wiki.php.net/rfc/return_types
 * Combined Comparison (Spaceship) Operator - https://wiki.php.net/rfc/combined-comparison-operator
 * Group Use Declarations - https://wiki.php.net/rfc/group_use_declarations
 * Exceptions in the engine - https://wiki.php.net/rfc/engine_exceptions_for_php7
 * Scalar Type Declarations v0.5 - https://wiki.php.net/rfc/scalar_type_hints_v5
 * Context Sensitive lexer - https://wiki.php.net/rfc/context_sensitive_lexer
 * Generator Return Expressions - https://wiki.php.net/rfc/generator-return-expressions
 * Anonymous Classes - https://wiki.php.net/rfc/anonymous_classes
 * Generator Delegation - https://wiki.php.net/rfc/generator-delegation
 * Reserving More Types in PHP 7 - https://wiki.php.net/rfc/reserve_more_types_in_php_7
 * Reserve Even More Types in PHP 7 - https://wiki.php.net/rfc/reserve_even_more_types_in_php_7
 * Throwable Interface - https://wiki.php.net/rfc/throwable-interface

## PHP 7.1

 * Class Constant Visibility - https://wiki.php.net/rfc/class_const_visibility
 * Void Return Type - https://wiki.php.net/rfc/void_return_type
 * Allow specifying keys in list() - https://wiki.php.net/rfc/list_keys
 * Generalize support of negative string offsets - https://wiki.php.net/rfc/negative-string-offsets
 * Null Coalesce Equal Operator - https://wiki.php.net/rfc/null_coalesce_equal_operator -> NON IMPLEMENTE 2016-07-05
 * Catching Multiple Exception Types - https://wiki.php.net/rfc/multiple-catch
 * Square bracket syntax for array destructuring assignment - https://wiki.php.net/rfc/short_list_syntax
 * Nullable Types - https://wiki.php.net/rfc/nullable_types
 * Closure from callable function - https://wiki.php.net/rfc/closurefromcallable
 * Iterable - https://wiki.php.net/rfc/iterable
 * Throw Error in Extensions - https://wiki.php.net/rfc/throw_error_in_extensions -> PAS ENCORE IMPLEMENTE 2016-07-06
 * Asynchronous Signal Handling - https://wiki.php.net/rfc/async_signals -> PAS ENCORE IMPLEMENTE 2016-07-06

## PHP 8.0 (avec deprecates en 7.1)

 * Deprecate mb_ereg_replace eval option - https://wiki.php.net/rfc/deprecate_mb_ereg_replace_eval_option
 * Deprecate (then Remove) Mcrypt - https://wiki.php.net/rfc/mcrypt-viking-funeral

# Builder PHP 7.1

```bash
cd ~/developpement/php/~/developpement/php/
git clone https://git.php.net/repository/php-src.git php-src

cd php-src

git checkout master
./vcsclean
git clean -f -d
git pull

./buildconf
./configure --prefix=$HOME/bin/php-7.1-debug \
    --disable-all --enable-debug \
    --enable-maintainer-zts
make -j 6 -l 8
make install
```
