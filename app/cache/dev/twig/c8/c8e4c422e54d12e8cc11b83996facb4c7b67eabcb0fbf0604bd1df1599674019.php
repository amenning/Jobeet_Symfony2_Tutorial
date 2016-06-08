<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_96424bfdbff88eb9da9576f163077b360436267de03bcb9cc86bd16ab986803c extends Twig_Template
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
        $__internal_bc22ef33fb427436281c1e1b30a6dc5703c28054cb8168d2953362dd5e3b5a4f = $this->env->getExtension("native_profiler");
        $__internal_bc22ef33fb427436281c1e1b30a6dc5703c28054cb8168d2953362dd5e3b5a4f->enter($__internal_bc22ef33fb427436281c1e1b30a6dc5703c28054cb8168d2953362dd5e3b5a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_bc22ef33fb427436281c1e1b30a6dc5703c28054cb8168d2953362dd5e3b5a4f->leave($__internal_bc22ef33fb427436281c1e1b30a6dc5703c28054cb8168d2953362dd5e3b5a4f_prof);

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
