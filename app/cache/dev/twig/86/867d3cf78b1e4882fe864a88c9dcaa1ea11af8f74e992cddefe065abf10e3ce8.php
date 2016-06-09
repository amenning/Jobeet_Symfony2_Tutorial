<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3dbd22612afa9f30a5352d248e4353ff41f75edb664de9a652509bef9a277e62 extends Twig_Template
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
        $__internal_2a3f021a10da1942bdcb0a1eed4e3859dee982bbee0bf89d05a669c00176a6c7 = $this->env->getExtension("native_profiler");
        $__internal_2a3f021a10da1942bdcb0a1eed4e3859dee982bbee0bf89d05a669c00176a6c7->enter($__internal_2a3f021a10da1942bdcb0a1eed4e3859dee982bbee0bf89d05a669c00176a6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2a3f021a10da1942bdcb0a1eed4e3859dee982bbee0bf89d05a669c00176a6c7->leave($__internal_2a3f021a10da1942bdcb0a1eed4e3859dee982bbee0bf89d05a669c00176a6c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
