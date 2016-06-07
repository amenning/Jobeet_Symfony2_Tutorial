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
        $__internal_afc74139425ae6552ac2617a519b969b5292cbc0e8e316b8a062456991dc4a6d = $this->env->getExtension("native_profiler");
        $__internal_afc74139425ae6552ac2617a519b969b5292cbc0e8e316b8a062456991dc4a6d->enter($__internal_afc74139425ae6552ac2617a519b969b5292cbc0e8e316b8a062456991dc4a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_afc74139425ae6552ac2617a519b969b5292cbc0e8e316b8a062456991dc4a6d->leave($__internal_afc74139425ae6552ac2617a519b969b5292cbc0e8e316b8a062456991dc4a6d_prof);

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
