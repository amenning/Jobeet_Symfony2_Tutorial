<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_197536565193bb3bad1435cf9946db667edbc4952c0b2a4a582b22676593f512 extends Twig_Template
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
        $__internal_ab0124392bb409f5c1505ac899b81a8b73d36aab3b97356b8bf3c9389ac64d58 = $this->env->getExtension("native_profiler");
        $__internal_ab0124392bb409f5c1505ac899b81a8b73d36aab3b97356b8bf3c9389ac64d58->enter($__internal_ab0124392bb409f5c1505ac899b81a8b73d36aab3b97356b8bf3c9389ac64d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ab0124392bb409f5c1505ac899b81a8b73d36aab3b97356b8bf3c9389ac64d58->leave($__internal_ab0124392bb409f5c1505ac899b81a8b73d36aab3b97356b8bf3c9389ac64d58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
