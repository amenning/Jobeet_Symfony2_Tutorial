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
        $__internal_7d6264274e31090d2946fd3b2edc99ab5b8b6ef27267bfa6f7305f54c7f5586b = $this->env->getExtension("native_profiler");
        $__internal_7d6264274e31090d2946fd3b2edc99ab5b8b6ef27267bfa6f7305f54c7f5586b->enter($__internal_7d6264274e31090d2946fd3b2edc99ab5b8b6ef27267bfa6f7305f54c7f5586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7d6264274e31090d2946fd3b2edc99ab5b8b6ef27267bfa6f7305f54c7f5586b->leave($__internal_7d6264274e31090d2946fd3b2edc99ab5b8b6ef27267bfa6f7305f54c7f5586b_prof);

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
