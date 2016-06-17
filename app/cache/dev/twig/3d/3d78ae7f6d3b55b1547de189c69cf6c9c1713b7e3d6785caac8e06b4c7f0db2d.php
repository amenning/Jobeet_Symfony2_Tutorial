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
        $__internal_62a94f09eafa86b4f7db7daa8ea337e8997405284aa02a0b32d20980a090c53e = $this->env->getExtension("native_profiler");
        $__internal_62a94f09eafa86b4f7db7daa8ea337e8997405284aa02a0b32d20980a090c53e->enter($__internal_62a94f09eafa86b4f7db7daa8ea337e8997405284aa02a0b32d20980a090c53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_62a94f09eafa86b4f7db7daa8ea337e8997405284aa02a0b32d20980a090c53e->leave($__internal_62a94f09eafa86b4f7db7daa8ea337e8997405284aa02a0b32d20980a090c53e_prof);

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
