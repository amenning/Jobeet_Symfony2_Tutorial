<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c2b992bfdb58fc2bee78deeea9043751895be7dcf1cc41511455d79f37f0baa5 extends Twig_Template
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
        $__internal_60951fdb048905bd23067a22a0d9b16abc452afdc6d059d2a38607022cfa354b = $this->env->getExtension("native_profiler");
        $__internal_60951fdb048905bd23067a22a0d9b16abc452afdc6d059d2a38607022cfa354b->enter($__internal_60951fdb048905bd23067a22a0d9b16abc452afdc6d059d2a38607022cfa354b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_60951fdb048905bd23067a22a0d9b16abc452afdc6d059d2a38607022cfa354b->leave($__internal_60951fdb048905bd23067a22a0d9b16abc452afdc6d059d2a38607022cfa354b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
