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
        $__internal_f23b86fd1d6c80b8b219cd8bc07ade78a98ba9aa2c982bc7a43c28632942fa7f = $this->env->getExtension("native_profiler");
        $__internal_f23b86fd1d6c80b8b219cd8bc07ade78a98ba9aa2c982bc7a43c28632942fa7f->enter($__internal_f23b86fd1d6c80b8b219cd8bc07ade78a98ba9aa2c982bc7a43c28632942fa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_f23b86fd1d6c80b8b219cd8bc07ade78a98ba9aa2c982bc7a43c28632942fa7f->leave($__internal_f23b86fd1d6c80b8b219cd8bc07ade78a98ba9aa2c982bc7a43c28632942fa7f_prof);

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
