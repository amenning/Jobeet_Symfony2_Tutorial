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
        $__internal_f753c32c3e65ee689981f4c1c1090ecaaa51fcbe494a6ea910d62343bf6815d1 = $this->env->getExtension("native_profiler");
        $__internal_f753c32c3e65ee689981f4c1c1090ecaaa51fcbe494a6ea910d62343bf6815d1->enter($__internal_f753c32c3e65ee689981f4c1c1090ecaaa51fcbe494a6ea910d62343bf6815d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f753c32c3e65ee689981f4c1c1090ecaaa51fcbe494a6ea910d62343bf6815d1->leave($__internal_f753c32c3e65ee689981f4c1c1090ecaaa51fcbe494a6ea910d62343bf6815d1_prof);

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
