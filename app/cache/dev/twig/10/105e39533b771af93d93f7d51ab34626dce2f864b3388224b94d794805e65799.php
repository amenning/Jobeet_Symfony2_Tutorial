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
        $__internal_43d91557993b53e49fd939013a6bb7e33441a0ba36522569ff1a35db8d4a5437 = $this->env->getExtension("native_profiler");
        $__internal_43d91557993b53e49fd939013a6bb7e33441a0ba36522569ff1a35db8d4a5437->enter($__internal_43d91557993b53e49fd939013a6bb7e33441a0ba36522569ff1a35db8d4a5437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_43d91557993b53e49fd939013a6bb7e33441a0ba36522569ff1a35db8d4a5437->leave($__internal_43d91557993b53e49fd939013a6bb7e33441a0ba36522569ff1a35db8d4a5437_prof);

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
