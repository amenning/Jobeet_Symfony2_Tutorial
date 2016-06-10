<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_15d3d406f189437a759d0f2d87fea9fd77fbb135140673ff67dccb340a5489bf extends Twig_Template
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
        $__internal_d49029b26ef21bf34aa81ea9bff6a6bff385e80a80016386bb55a8660b946dce = $this->env->getExtension("native_profiler");
        $__internal_d49029b26ef21bf34aa81ea9bff6a6bff385e80a80016386bb55a8660b946dce->enter($__internal_d49029b26ef21bf34aa81ea9bff6a6bff385e80a80016386bb55a8660b946dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d49029b26ef21bf34aa81ea9bff6a6bff385e80a80016386bb55a8660b946dce->leave($__internal_d49029b26ef21bf34aa81ea9bff6a6bff385e80a80016386bb55a8660b946dce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
