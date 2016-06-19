<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bbfde6df92e48b8b835f60ebb8cde2e0ddb7fb22d8890fbe863d0c12fbcf2e2a extends Twig_Template
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
        $__internal_9fa20121ca057b1984cf0778076cc6a9fd515f6520fd6f513fb76eb4f3bc006a = $this->env->getExtension("native_profiler");
        $__internal_9fa20121ca057b1984cf0778076cc6a9fd515f6520fd6f513fb76eb4f3bc006a->enter($__internal_9fa20121ca057b1984cf0778076cc6a9fd515f6520fd6f513fb76eb4f3bc006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9fa20121ca057b1984cf0778076cc6a9fd515f6520fd6f513fb76eb4f3bc006a->leave($__internal_9fa20121ca057b1984cf0778076cc6a9fd515f6520fd6f513fb76eb4f3bc006a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
