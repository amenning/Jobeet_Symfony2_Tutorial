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
        $__internal_a5db4b92fa560eedf9d2d7706c36fe160c4bbee618ebe8366a3ecd63f5bcf1e7 = $this->env->getExtension("native_profiler");
        $__internal_a5db4b92fa560eedf9d2d7706c36fe160c4bbee618ebe8366a3ecd63f5bcf1e7->enter($__internal_a5db4b92fa560eedf9d2d7706c36fe160c4bbee618ebe8366a3ecd63f5bcf1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a5db4b92fa560eedf9d2d7706c36fe160c4bbee618ebe8366a3ecd63f5bcf1e7->leave($__internal_a5db4b92fa560eedf9d2d7706c36fe160c4bbee618ebe8366a3ecd63f5bcf1e7_prof);

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
