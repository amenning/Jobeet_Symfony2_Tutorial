<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6f65aa6e362fd30b1c32c86a062d890ad05b0f307974071d7f93c9e93585ce17 extends Twig_Template
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
        $__internal_07a8f958e248d3041c37e632c67a7a3569c255a0c6d09c8db619d270f46a1922 = $this->env->getExtension("native_profiler");
        $__internal_07a8f958e248d3041c37e632c67a7a3569c255a0c6d09c8db619d270f46a1922->enter($__internal_07a8f958e248d3041c37e632c67a7a3569c255a0c6d09c8db619d270f46a1922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_07a8f958e248d3041c37e632c67a7a3569c255a0c6d09c8db619d270f46a1922->leave($__internal_07a8f958e248d3041c37e632c67a7a3569c255a0c6d09c8db619d270f46a1922_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
