<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bca0bd27e82bc4f4a84988df0b8459f9a64a676eb8b427813edfaedf45096561 extends Twig_Template
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
        $__internal_fa3ca517e9c602c81a88b7a1330bf2b77d82f4bf6a297a2b151f3d561e245e2a = $this->env->getExtension("native_profiler");
        $__internal_fa3ca517e9c602c81a88b7a1330bf2b77d82f4bf6a297a2b151f3d561e245e2a->enter($__internal_fa3ca517e9c602c81a88b7a1330bf2b77d82f4bf6a297a2b151f3d561e245e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fa3ca517e9c602c81a88b7a1330bf2b77d82f4bf6a297a2b151f3d561e245e2a->leave($__internal_fa3ca517e9c602c81a88b7a1330bf2b77d82f4bf6a297a2b151f3d561e245e2a_prof);

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
