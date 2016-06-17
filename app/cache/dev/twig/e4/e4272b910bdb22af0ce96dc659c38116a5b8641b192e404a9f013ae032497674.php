<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_c92deee2e7ac4792c0f22d2baf9d695d9b0ae0de6b5c93e9e1ee549647992f1f extends Twig_Template
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
        $__internal_cf90724de4ef1f0643fd44793429d287dc67790f639763e4c468fa45969528e1 = $this->env->getExtension("native_profiler");
        $__internal_cf90724de4ef1f0643fd44793429d287dc67790f639763e4c468fa45969528e1->enter($__internal_cf90724de4ef1f0643fd44793429d287dc67790f639763e4c468fa45969528e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_cf90724de4ef1f0643fd44793429d287dc67790f639763e4c468fa45969528e1->leave($__internal_cf90724de4ef1f0643fd44793429d287dc67790f639763e4c468fa45969528e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <?php $vars = $widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php*/
/*             // There should be no spaces between the colons and the widgets, that's why*/
/*             // this block is written in a single PHP tag*/
/*             echo $view['form']->widget($form['hour'], $vars);*/
/* */
/*             if ($with_minutes) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['minute'], $vars);*/
/*             }*/
/* */
/*             if ($with_seconds) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['second'], $vars);*/
/*             }*/
/*         ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
