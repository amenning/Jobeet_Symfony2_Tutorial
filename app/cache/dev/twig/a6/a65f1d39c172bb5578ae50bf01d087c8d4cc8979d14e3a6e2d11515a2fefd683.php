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
        $__internal_3538bf1a9ec0bc3a5eeaffc082e5d37c0851abcb903909f2f7190c87ec88ddc0 = $this->env->getExtension("native_profiler");
        $__internal_3538bf1a9ec0bc3a5eeaffc082e5d37c0851abcb903909f2f7190c87ec88ddc0->enter($__internal_3538bf1a9ec0bc3a5eeaffc082e5d37c0851abcb903909f2f7190c87ec88ddc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3538bf1a9ec0bc3a5eeaffc082e5d37c0851abcb903909f2f7190c87ec88ddc0->leave($__internal_3538bf1a9ec0bc3a5eeaffc082e5d37c0851abcb903909f2f7190c87ec88ddc0_prof);

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
