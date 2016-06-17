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
        $__internal_ab0bb984104a48675ff5e5acece007a98c57aa778d16ec9e1d48c4bfbb7d6a57 = $this->env->getExtension("native_profiler");
        $__internal_ab0bb984104a48675ff5e5acece007a98c57aa778d16ec9e1d48c4bfbb7d6a57->enter($__internal_ab0bb984104a48675ff5e5acece007a98c57aa778d16ec9e1d48c4bfbb7d6a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ab0bb984104a48675ff5e5acece007a98c57aa778d16ec9e1d48c4bfbb7d6a57->leave($__internal_ab0bb984104a48675ff5e5acece007a98c57aa778d16ec9e1d48c4bfbb7d6a57_prof);

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
