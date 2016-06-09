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
        $__internal_37011605aecff0537bef1049ccb215a27f87b65117b643e79b7615a7a9ef311f = $this->env->getExtension("native_profiler");
        $__internal_37011605aecff0537bef1049ccb215a27f87b65117b643e79b7615a7a9ef311f->enter($__internal_37011605aecff0537bef1049ccb215a27f87b65117b643e79b7615a7a9ef311f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_37011605aecff0537bef1049ccb215a27f87b65117b643e79b7615a7a9ef311f->leave($__internal_37011605aecff0537bef1049ccb215a27f87b65117b643e79b7615a7a9ef311f_prof);

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
