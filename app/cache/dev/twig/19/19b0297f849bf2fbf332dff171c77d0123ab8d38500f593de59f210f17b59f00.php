<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c99b08111d0727fc23cba2220b786f3b11169e44289585d6a12baea7dd50a820 extends Twig_Template
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
        $__internal_d2bc0f7f1a1ac4946a02753b05eadb67a2d0f8994b63bac0b15309b3ad5b5328 = $this->env->getExtension("native_profiler");
        $__internal_d2bc0f7f1a1ac4946a02753b05eadb67a2d0f8994b63bac0b15309b3ad5b5328->enter($__internal_d2bc0f7f1a1ac4946a02753b05eadb67a2d0f8994b63bac0b15309b3ad5b5328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d2bc0f7f1a1ac4946a02753b05eadb67a2d0f8994b63bac0b15309b3ad5b5328->leave($__internal_d2bc0f7f1a1ac4946a02753b05eadb67a2d0f8994b63bac0b15309b3ad5b5328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
