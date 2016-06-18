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
        $__internal_5e419d6d6d006ebdb5d5c2eb3b4580d50009f57f4df12e69e1f8ddd0031b90eb = $this->env->getExtension("native_profiler");
        $__internal_5e419d6d6d006ebdb5d5c2eb3b4580d50009f57f4df12e69e1f8ddd0031b90eb->enter($__internal_5e419d6d6d006ebdb5d5c2eb3b4580d50009f57f4df12e69e1f8ddd0031b90eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_5e419d6d6d006ebdb5d5c2eb3b4580d50009f57f4df12e69e1f8ddd0031b90eb->leave($__internal_5e419d6d6d006ebdb5d5c2eb3b4580d50009f57f4df12e69e1f8ddd0031b90eb_prof);

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
