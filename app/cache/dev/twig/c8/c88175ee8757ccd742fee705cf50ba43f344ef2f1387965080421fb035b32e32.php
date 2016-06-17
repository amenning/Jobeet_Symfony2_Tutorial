<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bc6dca8301b048501a80101ec55b60a3ee2332c4250ad5d55932c01e038325a0 extends Twig_Template
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
        $__internal_1af4e72458870f0dc4e536acf2ffe61f8b11df9a98f209da3d6ab97af711824e = $this->env->getExtension("native_profiler");
        $__internal_1af4e72458870f0dc4e536acf2ffe61f8b11df9a98f209da3d6ab97af711824e->enter($__internal_1af4e72458870f0dc4e536acf2ffe61f8b11df9a98f209da3d6ab97af711824e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1af4e72458870f0dc4e536acf2ffe61f8b11df9a98f209da3d6ab97af711824e->leave($__internal_1af4e72458870f0dc4e536acf2ffe61f8b11df9a98f209da3d6ab97af711824e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
