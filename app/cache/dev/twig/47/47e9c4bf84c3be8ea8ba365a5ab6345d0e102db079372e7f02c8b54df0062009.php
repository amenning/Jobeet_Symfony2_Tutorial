<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5a7443d2b2ddb86d3935f1a98420fcecaa44d47665ec363de8bbb990ed4b6cf5 extends Twig_Template
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
        $__internal_85a4e77f4418fab24bef5f2c7de6882c6d634c0ea32ecee98798d0dd8b3351ae = $this->env->getExtension("native_profiler");
        $__internal_85a4e77f4418fab24bef5f2c7de6882c6d634c0ea32ecee98798d0dd8b3351ae->enter($__internal_85a4e77f4418fab24bef5f2c7de6882c6d634c0ea32ecee98798d0dd8b3351ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_85a4e77f4418fab24bef5f2c7de6882c6d634c0ea32ecee98798d0dd8b3351ae->leave($__internal_85a4e77f4418fab24bef5f2c7de6882c6d634c0ea32ecee98798d0dd8b3351ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
