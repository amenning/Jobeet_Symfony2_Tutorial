<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a0e1c4373c15a0ed773e4a9ac773967015e325c8b3ac1fe4efbf44b3627d3236 extends Twig_Template
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
        $__internal_2faeef8865a50594f5249b742b5b2286f36f9e1d87cc8c065d2deb098cd635b0 = $this->env->getExtension("native_profiler");
        $__internal_2faeef8865a50594f5249b742b5b2286f36f9e1d87cc8c065d2deb098cd635b0->enter($__internal_2faeef8865a50594f5249b742b5b2286f36f9e1d87cc8c065d2deb098cd635b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2faeef8865a50594f5249b742b5b2286f36f9e1d87cc8c065d2deb098cd635b0->leave($__internal_2faeef8865a50594f5249b742b5b2286f36f9e1d87cc8c065d2deb098cd635b0_prof);

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
