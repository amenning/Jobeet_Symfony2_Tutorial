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
        $__internal_45863d800a982decefe1341a207865d88862326af49a3508d08d0344d7f852ad = $this->env->getExtension("native_profiler");
        $__internal_45863d800a982decefe1341a207865d88862326af49a3508d08d0344d7f852ad->enter($__internal_45863d800a982decefe1341a207865d88862326af49a3508d08d0344d7f852ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_45863d800a982decefe1341a207865d88862326af49a3508d08d0344d7f852ad->leave($__internal_45863d800a982decefe1341a207865d88862326af49a3508d08d0344d7f852ad_prof);

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
