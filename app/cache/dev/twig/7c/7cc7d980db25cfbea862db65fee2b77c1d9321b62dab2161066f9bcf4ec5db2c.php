<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_36dd3b0336c929dbf4809e71144a9ccb8f8068a1457a3cca52c88edbfcf7050d extends Twig_Template
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
        $__internal_cb0216e2282de5e9361d87f510f1ad76bbd0750bdc2f2b3c9c6628c0dd6557d6 = $this->env->getExtension("native_profiler");
        $__internal_cb0216e2282de5e9361d87f510f1ad76bbd0750bdc2f2b3c9c6628c0dd6557d6->enter($__internal_cb0216e2282de5e9361d87f510f1ad76bbd0750bdc2f2b3c9c6628c0dd6557d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_cb0216e2282de5e9361d87f510f1ad76bbd0750bdc2f2b3c9c6628c0dd6557d6->leave($__internal_cb0216e2282de5e9361d87f510f1ad76bbd0750bdc2f2b3c9c6628c0dd6557d6_prof);

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
