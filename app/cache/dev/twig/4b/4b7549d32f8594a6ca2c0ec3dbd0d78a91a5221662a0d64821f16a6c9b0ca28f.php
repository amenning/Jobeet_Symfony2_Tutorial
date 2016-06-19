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
        $__internal_b79f4e73dcfd586fc931d1750ef5e9d0198c995dfc7a1f2a32082ef5e565bd2b = $this->env->getExtension("native_profiler");
        $__internal_b79f4e73dcfd586fc931d1750ef5e9d0198c995dfc7a1f2a32082ef5e565bd2b->enter($__internal_b79f4e73dcfd586fc931d1750ef5e9d0198c995dfc7a1f2a32082ef5e565bd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b79f4e73dcfd586fc931d1750ef5e9d0198c995dfc7a1f2a32082ef5e565bd2b->leave($__internal_b79f4e73dcfd586fc931d1750ef5e9d0198c995dfc7a1f2a32082ef5e565bd2b_prof);

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
