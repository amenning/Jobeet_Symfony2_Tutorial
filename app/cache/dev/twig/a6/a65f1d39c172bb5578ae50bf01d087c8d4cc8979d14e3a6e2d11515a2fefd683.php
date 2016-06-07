<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fe99d7e78f7bd622458857edd177f3eaa09036676a04b9abdec615867b21bcfb extends Twig_Template
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
        $__internal_ccb5c89597842ac702251f4b623b15ee8f22343f02fd7c4dd7507a58298053b6 = $this->env->getExtension("native_profiler");
        $__internal_ccb5c89597842ac702251f4b623b15ee8f22343f02fd7c4dd7507a58298053b6->enter($__internal_ccb5c89597842ac702251f4b623b15ee8f22343f02fd7c4dd7507a58298053b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ccb5c89597842ac702251f4b623b15ee8f22343f02fd7c4dd7507a58298053b6->leave($__internal_ccb5c89597842ac702251f4b623b15ee8f22343f02fd7c4dd7507a58298053b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
