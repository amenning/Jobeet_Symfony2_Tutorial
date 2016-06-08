<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_197536565193bb3bad1435cf9946db667edbc4952c0b2a4a582b22676593f512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9db5d45040258dd55a0bd1ba254870ad173a172ea1faa8bac9c0a7d206e3792 = $this->env->getExtension("native_profiler");
        $__internal_b9db5d45040258dd55a0bd1ba254870ad173a172ea1faa8bac9c0a7d206e3792->enter($__internal_b9db5d45040258dd55a0bd1ba254870ad173a172ea1faa8bac9c0a7d206e3792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b9db5d45040258dd55a0bd1ba254870ad173a172ea1faa8bac9c0a7d206e3792->leave($__internal_b9db5d45040258dd55a0bd1ba254870ad173a172ea1faa8bac9c0a7d206e3792_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
