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
        $__internal_e267f8ce7c06d8a876c36cadd50070e813bde0c92bdc7970372e5a15d46ed835 = $this->env->getExtension("native_profiler");
        $__internal_e267f8ce7c06d8a876c36cadd50070e813bde0c92bdc7970372e5a15d46ed835->enter($__internal_e267f8ce7c06d8a876c36cadd50070e813bde0c92bdc7970372e5a15d46ed835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e267f8ce7c06d8a876c36cadd50070e813bde0c92bdc7970372e5a15d46ed835->leave($__internal_e267f8ce7c06d8a876c36cadd50070e813bde0c92bdc7970372e5a15d46ed835_prof);

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
