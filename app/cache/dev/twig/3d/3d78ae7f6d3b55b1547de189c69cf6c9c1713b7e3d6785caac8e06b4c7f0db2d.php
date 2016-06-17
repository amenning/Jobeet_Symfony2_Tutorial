<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4ea771b2cf0aaf3ce6a2f1357c9b92f5e37d97a1e66c1c3a4531812d78698dbe extends Twig_Template
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
        $__internal_16b0cb22ee7f92f1f56fcde1cd631133dfd77ab6622b1e0ce36ef2163de25584 = $this->env->getExtension("native_profiler");
        $__internal_16b0cb22ee7f92f1f56fcde1cd631133dfd77ab6622b1e0ce36ef2163de25584->enter($__internal_16b0cb22ee7f92f1f56fcde1cd631133dfd77ab6622b1e0ce36ef2163de25584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_16b0cb22ee7f92f1f56fcde1cd631133dfd77ab6622b1e0ce36ef2163de25584->leave($__internal_16b0cb22ee7f92f1f56fcde1cd631133dfd77ab6622b1e0ce36ef2163de25584_prof);

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
