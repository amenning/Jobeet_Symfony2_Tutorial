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
        $__internal_608f7a3fe9a3a90f8ae3861dd5b2963bfa0ee2a96e602fdd7d8fa8ed2fe89a44 = $this->env->getExtension("native_profiler");
        $__internal_608f7a3fe9a3a90f8ae3861dd5b2963bfa0ee2a96e602fdd7d8fa8ed2fe89a44->enter($__internal_608f7a3fe9a3a90f8ae3861dd5b2963bfa0ee2a96e602fdd7d8fa8ed2fe89a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_608f7a3fe9a3a90f8ae3861dd5b2963bfa0ee2a96e602fdd7d8fa8ed2fe89a44->leave($__internal_608f7a3fe9a3a90f8ae3861dd5b2963bfa0ee2a96e602fdd7d8fa8ed2fe89a44_prof);

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
