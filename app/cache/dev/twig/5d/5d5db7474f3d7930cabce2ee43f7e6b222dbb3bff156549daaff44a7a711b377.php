<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d3ddf3bb52d6ae7e483db2e6042b3e1f89b3b5210b14c98056b87e3b3966a387 extends Twig_Template
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
        $__internal_e3b4e4054f8e6aa96e0b6c131d121b644ba04b51f8449c4ce23327558e20203e = $this->env->getExtension("native_profiler");
        $__internal_e3b4e4054f8e6aa96e0b6c131d121b644ba04b51f8449c4ce23327558e20203e->enter($__internal_e3b4e4054f8e6aa96e0b6c131d121b644ba04b51f8449c4ce23327558e20203e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e3b4e4054f8e6aa96e0b6c131d121b644ba04b51f8449c4ce23327558e20203e->leave($__internal_e3b4e4054f8e6aa96e0b6c131d121b644ba04b51f8449c4ce23327558e20203e_prof);

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
