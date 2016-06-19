<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b67bcb3cb85a24a5f2fe2be443131da48b5f7d9c21a44f47678a83e7293ed07f extends Twig_Template
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
        $__internal_f0550a6a2476ee4ce0ddbd146e04af50285ae553370c9369ac1567be88f9f4d0 = $this->env->getExtension("native_profiler");
        $__internal_f0550a6a2476ee4ce0ddbd146e04af50285ae553370c9369ac1567be88f9f4d0->enter($__internal_f0550a6a2476ee4ce0ddbd146e04af50285ae553370c9369ac1567be88f9f4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f0550a6a2476ee4ce0ddbd146e04af50285ae553370c9369ac1567be88f9f4d0->leave($__internal_f0550a6a2476ee4ce0ddbd146e04af50285ae553370c9369ac1567be88f9f4d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
