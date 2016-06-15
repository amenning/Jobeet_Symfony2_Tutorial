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
        $__internal_a2082f550a7b07c94ff4ccdf969cbac9dc0b2d572c575e62049334e5122dd3e7 = $this->env->getExtension("native_profiler");
        $__internal_a2082f550a7b07c94ff4ccdf969cbac9dc0b2d572c575e62049334e5122dd3e7->enter($__internal_a2082f550a7b07c94ff4ccdf969cbac9dc0b2d572c575e62049334e5122dd3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a2082f550a7b07c94ff4ccdf969cbac9dc0b2d572c575e62049334e5122dd3e7->leave($__internal_a2082f550a7b07c94ff4ccdf969cbac9dc0b2d572c575e62049334e5122dd3e7_prof);

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
