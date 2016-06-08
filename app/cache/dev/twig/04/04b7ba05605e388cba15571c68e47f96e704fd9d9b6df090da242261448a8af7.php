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
        $__internal_0fd53878e4817ca205210f999ed53ee6bd750b3dee657139a467f9db74e5871f = $this->env->getExtension("native_profiler");
        $__internal_0fd53878e4817ca205210f999ed53ee6bd750b3dee657139a467f9db74e5871f->enter($__internal_0fd53878e4817ca205210f999ed53ee6bd750b3dee657139a467f9db74e5871f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0fd53878e4817ca205210f999ed53ee6bd750b3dee657139a467f9db74e5871f->leave($__internal_0fd53878e4817ca205210f999ed53ee6bd750b3dee657139a467f9db74e5871f_prof);

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
