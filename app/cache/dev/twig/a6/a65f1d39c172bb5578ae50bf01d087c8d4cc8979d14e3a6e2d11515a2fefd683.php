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
        $__internal_55168e4447ab022071a2cc1883089f0acc4087adeb27db461dd70a39a3b75fc0 = $this->env->getExtension("native_profiler");
        $__internal_55168e4447ab022071a2cc1883089f0acc4087adeb27db461dd70a39a3b75fc0->enter($__internal_55168e4447ab022071a2cc1883089f0acc4087adeb27db461dd70a39a3b75fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_55168e4447ab022071a2cc1883089f0acc4087adeb27db461dd70a39a3b75fc0->leave($__internal_55168e4447ab022071a2cc1883089f0acc4087adeb27db461dd70a39a3b75fc0_prof);

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
