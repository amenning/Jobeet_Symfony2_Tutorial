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
        $__internal_8f64951377473f6961ee8fb2c5ac1185ae3d10f154d727a97697f12ddffde29f = $this->env->getExtension("native_profiler");
        $__internal_8f64951377473f6961ee8fb2c5ac1185ae3d10f154d727a97697f12ddffde29f->enter($__internal_8f64951377473f6961ee8fb2c5ac1185ae3d10f154d727a97697f12ddffde29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8f64951377473f6961ee8fb2c5ac1185ae3d10f154d727a97697f12ddffde29f->leave($__internal_8f64951377473f6961ee8fb2c5ac1185ae3d10f154d727a97697f12ddffde29f_prof);

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
