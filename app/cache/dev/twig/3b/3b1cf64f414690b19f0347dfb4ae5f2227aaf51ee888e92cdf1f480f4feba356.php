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
        $__internal_fe7d2ca28dde17149f2edd60f679bb8e66532c81600b4dc00fa241a22fb162fd = $this->env->getExtension("native_profiler");
        $__internal_fe7d2ca28dde17149f2edd60f679bb8e66532c81600b4dc00fa241a22fb162fd->enter($__internal_fe7d2ca28dde17149f2edd60f679bb8e66532c81600b4dc00fa241a22fb162fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_fe7d2ca28dde17149f2edd60f679bb8e66532c81600b4dc00fa241a22fb162fd->leave($__internal_fe7d2ca28dde17149f2edd60f679bb8e66532c81600b4dc00fa241a22fb162fd_prof);

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
