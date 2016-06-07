<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8f7021700362d19e85cdd5034c9e5a239392b7ecba0d50f595687a09a81a8670 extends Twig_Template
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
        $__internal_96f574dc450ecea6034100f2cf710d31603b5ceb2ec9c0312fb4f361bff41191 = $this->env->getExtension("native_profiler");
        $__internal_96f574dc450ecea6034100f2cf710d31603b5ceb2ec9c0312fb4f361bff41191->enter($__internal_96f574dc450ecea6034100f2cf710d31603b5ceb2ec9c0312fb4f361bff41191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_96f574dc450ecea6034100f2cf710d31603b5ceb2ec9c0312fb4f361bff41191->leave($__internal_96f574dc450ecea6034100f2cf710d31603b5ceb2ec9c0312fb4f361bff41191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
